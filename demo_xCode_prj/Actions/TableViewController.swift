//
//  TableViewController.swift
//  Actions
//
//  Created by Gary Tokman on 10/27/17.
//  Copyright © 2017 Gary Tokman. All rights reserved.
//

import UIKit
import UserNotifications

final class Todo {
    let title: String
    let date: String //Date
    var isImportant: Bool
    var isFinished: Bool
    
    init(title: String) {
        self.title = "Рекомендуете ли вы Иванова Ивана?"
        
        self.date = "на должность Python программиста"//Date(timeInterval: , since: <#T##Date#>)
        self.isImportant = false
        self.isFinished = false
    }
}

class TableViewController: UITableViewController {
    
    var todos = [Todo]()
    
    //@IBAction func Button(sender:UIButton){
    //    print("HI")
    //}
    
    @IBAction func alertNotification(_ sender: Any) {
        //print("Hi")
        sheduleNotification(in: 5){
            (success) in
            if success {
                print("we did it")
            }
            else{
                print("error")
            }
        }
    }
    
    func sheduleNotification(in seconds: TimeInterval, completion: (Bool) -> ()){
        removeNotifications(withIdentifiers: ["MyUniqueIdendifier"])
        
        
        let date = Date(timeIntervalSinceNow: seconds)
        print(Date())
        print(date)
        
        let content = UNMutableNotificationContent()
        content.title = "Рекомендуете ли вы Иванова Ивана?"
        content.body = "на должность Python программиста"
        content.sound = UNNotificationSound.default()
        
        let calendar = Calendar(identifier: .gregorian)
        let components = calendar.dateComponents([.month, .day, .hour, .minute, .second], from: date)
        let trigger = UNCalendarNotificationTrigger(dateMatching: components, repeats: false)
        let request = UNNotificationRequest(identifier: "MyUniqueIdendifier", content: content, trigger: trigger)
        
        let center = UNUserNotificationCenter.current()
        
        center.add(request, withCompletionHandler: nil)
    }
    
    func removeNotifications(withIdentifiers identifiers:[String]){
        let center = UNUserNotificationCenter.current()
        center.removePendingNotificationRequests(withIdentifiers: identifiers)
    }
    
    deinit {
        removeNotifications(withIdentifiers: ["MyUniqueIdendifier"])
    }
    
    
    override func viewDidLoad() {
        super.viewDidLoad()

        for i in 1..<2 {
            todos.append(Todo(title: "Todo #\(i)"))
        }
    }
    
    // Mark: - Table view delegate
    override func tableView(_ tableView: UITableView, trailingSwipeActionsConfigurationForRowAt indexPath: IndexPath) -> UISwipeActionsConfiguration? {
        let important = importantAction(at: indexPath)
        let delete = deleteAction(at: indexPath)
        //let delete = importantAction(at: indexPath)
        return UISwipeActionsConfiguration(actions: [delete, important])
    }
    
    
    override func tableView(_ tableView: UITableView, leadingSwipeActionsConfigurationForRowAt indexPath: IndexPath) -> UISwipeActionsConfiguration? {
        let complete = completeAction(at: indexPath)
        return UISwipeActionsConfiguration(actions: [complete])
    }
    
    func completeAction(at indexPath: IndexPath) -> UIContextualAction{
        //let todo = todos[IndexPath.row]
        let action = UIContextualAction(style: .destructive, title: "Complete"){
            (action, view, completion) in self.todos.remove(at: indexPath.row)
            self.tableView.deleteRows(at: [indexPath], with: .automatic)
            completion(true)
        }
        action.image = UIImage(named: "Check")
        action.backgroundColor = .green
        return action
    }
    
    
    func importantAction(at indexPath: IndexPath) -> UIContextualAction{
        let todo = todos[indexPath.row]
        let action = UIContextualAction(style: .normal, title: "Imortant"){
            (action, view, completion) in todo.isImportant = !todo.isImportant
            completion(true)
        }
        action.image = UIImage(named: "Alarm")
        action.backgroundColor = todo.isImportant ? .purple : .gray
        return action
    }
    
    func deleteAction(at IndexPath: IndexPath) -> UIContextualAction{
        //let todo = todos[IndexPath.row]
        let action = UIContextualAction(style: .destructive, title: "Delete"){
            (action, view, completion) in self.todos.remove(at: IndexPath.row)
            self.tableView.deleteRows(at: [IndexPath], with: .automatic)
            completion(true)
        }
        action.image = UIImage(named: "Trash")
        action.backgroundColor = .red
        return action
    }
    
    

    // MARK: - Table view data source

    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // #warning Incomplete implementation, return the number of rows
        return todos.count
    }

    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "TodoCell", for: indexPath)

        // Configure the cell...
        let todo = todos[indexPath.row]
        cell.textLabel?.text = todo.title
        cell.detailTextLabel?.text = todo.date.description

        return cell
    }
}
