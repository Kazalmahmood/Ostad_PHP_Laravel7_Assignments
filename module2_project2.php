<?php

//** Module 2 PHP Assignment **//
//* Terminal-Based Contact Management Application *//

//** Initialize Contacts Array **//
$contacts = [];

//** Function to Add Contact **//
function addContact(array &$contacts)
{
    $name = (string) readline("\nEnter contact name: ");
    $phone = (string) readline("Enter contact phone number: ");
    $email = (string) readline("Enter contact email: ");
    $contacts[] = [
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
    ];
    echo "Contact added successfully!\n\n";
}

//** Function to Display All Contacts **//
function displayContacts(array $contacts): void
{
    if (empty($contacts)) {
        echo "\nNo contacts found.\n\n";
        return;
    } else {
        echo "\n** Contacts List **\n";
        if (count($contacts) > 1) {
            echo count($contacts) . " Contacts found.\n\n";
        } else {
            echo "1 Contact found.\n\n";
        }
        foreach ($contacts as $index => $contact) {
            echo $index + 1 . ". \n";
            echo "Name: " . $contact['name'] . "\n";
            echo "Phone: " . $contact['phone'] . "\n";
            echo "Email: " . $contact['email'] . "\n";
            echo "--------------\n\n";
        }
    }
}

//** Main Application Menu and Loop **//
echo "\n** Welcome to the Contact Management System! **\n\n";
echo "Menu:\n";
echo "-----\n";

while (true) {
    echo "1. Add Contact\n";
    echo "2. Display Contacts\n";
    echo "3. Exit\n";

    $choice = (int) readline("Enter your choice: ");

    if ($choice === 1) {
        addContact($contacts);
    } elseif ($choice === 2) {
        displayContacts($contacts);
    } elseif ($choice === 3) {
        echo "Exiting program.\n";
        break;
    } else {
        echo "\nInvalid choice. Please try again.\n\n";
    }
}
