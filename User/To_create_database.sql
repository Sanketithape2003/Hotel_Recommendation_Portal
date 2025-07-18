-- Create the database if not already exists
CREATE DATABASE IF NOT EXISTS hotel_reviews;

-- Use the database
USE hotel_reviews;

-- Create table to store review data
CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(100),
    hotel VARCHAR(100),
    overall_experience INT,
    budget VARCHAR(50),
    room_type VARCHAR(50),
    improvement TEXT,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
