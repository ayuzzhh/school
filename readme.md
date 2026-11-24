## For Database :-

CREATE DATABASE ymca_school;

USE ymca_school;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    class VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

## Commands to use if Appache is not working 

1. Open Cmd pannel 
2. cd C:\xampp\mysql\bin
3. mysql -u root
4. Creation of database
5. type exit to get out of it 
6. C:\xampp\php\php.exe -v
7. C:\xampp\php\php.exe -S localhost:8000 -t C:\xampp\htdocs\Your_filename (It will run the server)


## DELETE FROM POWERSHELL : 

1. Clear-History 
2. Remove-Item (Get-PSReadLineOption).HistorySavePath -Force
