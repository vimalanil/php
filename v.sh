#!/bin/bash

while true; do
    clear
    echo "Menu:"
    echo "1. Display today's date"
    echo "2. Display current user"
    echo "3. Display current working directory"
    echo "4. Quit"

    read -p "Enter your choice: " choice

    case $choice in
        1)
            echo "Today's date is: $(date)"
            ;;
        2)
            echo "Current user is: $USER"
            ;;
        3)
            echo "Current working directory is: $PWD"
            ;;
        4)
            echo "Goodbye!"
            exit 0
            ;;
        *)
            echo "Invalid choice. Please enter a valid option (1-4)."
            ;;
    esac

    read -p "Press Enter to continue..."
done