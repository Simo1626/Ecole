-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2024-10-17 14:09:22.706

-- tables
-- Table: Attendance
CREATE TABLE Attendance (
    id int NOT NULL AUTO_INCREMENT,
    attendance_date date NULL,
    status enum('present','absent','excused') NULL,
    Student_id int NOT NULL,
    Group_id int NOT NULL,
    CONSTRAINT Attendance_pk PRIMARY KEY (id)
);

-- Table: Course
CREATE TABLE Course (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    description text NULL,
    Institution_id int NOT NULL,
    CONSTRAINT Course_pk PRIMARY KEY (id)
);

-- Table: Discount
CREATE TABLE Discount (
    id int NOT NULL AUTO_INCREMENT,
    discount_amount decimal(10,2) NULL,
    discount_type varchar(255) NULL,
    CONSTRAINT Discount_pk PRIMARY KEY (id)
);

-- Table: Employee
CREATE TABLE Employee (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    role varchar(100) NULL,
    phone_number varchar(20) NULL,
    Institution_id int NOT NULL,
    CONSTRAINT Employee_pk PRIMARY KEY (id)
);

-- Table: EmployeePayment
CREATE TABLE EmployeePayment (
    id int NOT NULL AUTO_INCREMENT,
    payment_date date NULL,
    Employee_id int NOT NULL,
    EmployeePaymentPlan_id int NOT NULL,
    CONSTRAINT EmployeePayment_pk PRIMARY KEY (id)
);

-- Table: EmployeePaymentPlan
CREATE TABLE EmployeePaymentPlan (
    id int NOT NULL AUTO_INCREMENT,
    plan_name varchar(255) NOT NULL,
    description text NULL,
    amount decimal(10,2) NOT NULL,
    payment_frequency enum('monthly', 'biweekly', 'yearly') NOT NULL,
    Institution_id int NOT NULL,
    CONSTRAINT EmployeePaymentPlan_pk PRIMARY KEY (id)
);

-- Table: Expense
CREATE TABLE Expense (
    id int NOT NULL AUTO_INCREMENT,
    description varchar(255) NOT NULL,
    amount decimal(10,2) NOT NULL,
    expense_type enum('maintenance', 'utilities', 'supplies', 'other') NOT NULL,
    expense_date date NOT NULL,
    Institution_id int NOT NULL,
    CONSTRAINT Expense_pk PRIMARY KEY (id)
);

-- Table: Group
CREATE TABLE `Group` (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    max_students int NULL,
    CONSTRAINT Group_pk PRIMARY KEY (id)
);

-- Table: Hall
CREATE TABLE Hall (
    id int NOT NULL AUTO_INCREMENT,
    hall_number varchar(10) NULL,
    capacity int NULL,
    facilities text NULL,
    Institution_id int NOT NULL,
    CONSTRAINT Hall_pk PRIMARY KEY (id)
);

-- Table: Institution
CREATE TABLE Institution (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    address varchar(255) NULL,
    phone_number varchar(20) NULL,
    email varchar(100) NULL,
    logo blob NULL,
    CONSTRAINT Institution_pk PRIMARY KEY (id)
);

-- Table: Schedule
CREATE TABLE Schedule (
    schedule_id int NOT NULL AUTO_INCREMENT,
    start_time datetime NULL,
    end_time datetime NULL,
    day_of_week enum('monday','tuesday','wednesday','thursday','friday','saturday','sunday') NULL,
    Hall_id int NOT NULL,
    Course_id int NOT NULL,
    Group_id int NOT NULL,
    Teacher_id int NOT NULL,
    CONSTRAINT Schedule_pk PRIMARY KEY (schedule_id)
);

-- Table: Student
CREATE TABLE Student (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    birthday date NOT NULL,
    grade_level varchar(50) NULL,
    phone_number varchar(20) NULL,
    email varchar(100) NULL,
    registration_date date NULL,
    responsible_name varchar(255) NULL,
    responsible_contact varchar(20) NULL,
    picture blob NULL,
    CONSTRAINT Student_pk PRIMARY KEY (id)
);

-- Table: StudentCourse
CREATE TABLE StudentCourse (
    id int NOT NULL AUTO_INCREMENT,
    registration_date date NULL,
    payment_due decimal(10,2) NULL,
    payment_status varchar(50) NULL,
    Course_id int NOT NULL,
    Student_id int NOT NULL,
    CONSTRAINT StudentCourse_pk PRIMARY KEY (id)
);

-- Table: StudentPayment
CREATE TABLE StudentPayment (
    id int NOT NULL AUTO_INCREMENT,
    payment_date date NULL,
    Student_id int NOT NULL,
    Discount_id int NOT NULL,
    StudentPaymentPlan_id int NOT NULL,
    CONSTRAINT StudentPayment_pk PRIMARY KEY (id)
);

-- Table: StudentPaymentPlan
CREATE TABLE StudentPaymentPlan (
    id int NOT NULL AUTO_INCREMENT,
    plan_name varchar(255) NOT NULL,
    description text NULL,
    amount decimal(10,2) NOT NULL,
    payment_frequency enum('monthly', 'yearly', 'per_course') NOT NULL,
    Institution_id int NOT NULL,
    CONSTRAINT StudentPaymentPlan_pk PRIMARY KEY (id)
);

-- Table: Teacher
CREATE TABLE Teacher (
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(255) NOT NULL,
    last_name varchar(255) NOT NULL,
    phone_number varchar(20) NULL,
    specialization varchar(255) NULL,
    CONSTRAINT Teacher_pk PRIMARY KEY (id)
);

-- Table: TeacherCourse
CREATE TABLE TeacherCourse (
    Teacher_id int NOT NULL,
    Course_id int NOT NULL,
    CONSTRAINT TeacherCourse_pk PRIMARY KEY (Teacher_id, Course_id)
);

-- Table: TeacherPayment
CREATE TABLE TeacherPayment (
    id int NOT NULL AUTO_INCREMENT,
    payment_date date NULL,
    Teacher_id int NOT NULL,
    TeacherPaymentPlan_id int NOT NULL,
    CONSTRAINT TeacherPayment_pk PRIMARY KEY (id)
);

-- Table: TeacherPaymentPlan
CREATE TABLE TeacherPaymentPlan (
    id int NOT NULL AUTO_INCREMENT,
    plan_name varchar(255) NOT NULL,
    description text NULL,
    amount decimal(10,2) NOT NULL,
    payment_frequency enum('per_session', 'per_course', 'monthly') NOT NULL,
    Institution_id int NOT NULL,
    CONSTRAINT TeacherPaymentPlan_pk PRIMARY KEY (id)
);

-- End of file.
