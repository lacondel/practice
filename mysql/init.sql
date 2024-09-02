-- Создаем базу данных, если она не существует
CREATE DATABASE IF NOT EXISTS practice_db;

-- Выбираем базу данных для работы
USE practice_db;

-- Создание таблицы для хранения пользователей
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_login VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL
);