
-- Table: ecole.Attendance
CREATE TABLE ecole.Attendance (
    id SERIAL PRIMARY KEY,
    attendance_date DATE NULL,
    status VARCHAR(255) NULL,
    Student_id INT NOT NULL,
    Group_id INT NOT NULL
);

-- Table: ecole.Course
CREATE TABLE ecole.Course (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole.Discount
CREATE TABLE ecole.Discount (
    id SERIAL PRIMARY KEY,
    discount_amount DECIMAL(10,2) NULL,
    discount_type VARCHAR(255) NULL
);

-- Table: ecole.Employee
CREATE TABLE ecole.Employee (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    role VARCHAR(100) NULL,
    phone_number VARCHAR(20) NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole.EmployeePayment
CREATE TABLE ecole.EmployeePayment (
    id SERIAL PRIMARY KEY,
    payment_date DATE NULL,
    Employee_id INT NOT NULL,
    EmployeePaymentPlan_id INT NOT NULL
);

-- Table: ecole.EmployeePaymentPlan
CREATE TABLE ecole.EmployeePaymentPlan (
    id SERIAL PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    description TEXT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_frequency VARCHAR(255) NOT NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole.Expense
CREATE TABLE ecole.Expense (
    id SERIAL PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    expense_type VARCHAR(255) NOT NULL,
    expense_date DATE NOT NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole."Group"
CREATE TABLE ecole."Group" (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    max_students INT NULL
);

-- Table: ecole.Hall
CREATE TABLE ecole.Hall (
    id SERIAL PRIMARY KEY,
    hall_number VARCHAR(10) NULL,
    capacity INT NULL,
    facilities TEXT NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole.Institution
CREATE TABLE ecole.Institution (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    address VARCHAR(255) NULL,
    phone_number VARCHAR(20) NULL,
    email VARCHAR(100) NULL,
    logo BYTEA NULL
);

-- Table: ecole.Schedule
CREATE TABLE ecole.Schedule (
    schedule_id SERIAL PRIMARY KEY,
    start_time TIMESTAMP NULL,
    end_time TIMESTAMP NULL,
    day_of_week VARCHAR(255) NULL,
    Hall_id INT NOT NULL,
    Course_id INT NOT NULL,
    Group_id INT NOT NULL,
    Teacher_id INT NOT NULL
);

-- Table: ecole.Student
CREATE TABLE ecole.Student (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    grade_level VARCHAR(50) NULL,
    phone_number VARCHAR(20) NULL,
    email VARCHAR(100) NULL,
    registration_date DATE NULL,
    responsible_name VARCHAR(255) NULL,
    responsible_contact VARCHAR(20) NULL,
    picture BYTEA NULL
);

-- Table: ecole.StudentCourse
CREATE TABLE ecole.StudentCourse (
    id SERIAL PRIMARY KEY,
    registration_date DATE NULL,
    payment_due DECIMAL(10,2) NULL,
    payment_status VARCHAR(50) NULL,
    Course_id INT NOT NULL,
    Student_id INT NOT NULL
);

-- Table: ecole.StudentPayment
CREATE TABLE ecole.StudentPayment (
    id SERIAL PRIMARY KEY,
    payment_date DATE NULL,
    Student_id INT NOT NULL,
    Discount_id INT NOT NULL,
    StudentPaymentPlan_id INT NOT NULL
);

-- Table: ecole.StudentPaymentPlan
CREATE TABLE ecole.StudentPaymentPlan (
    id SERIAL PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    description TEXT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_frequency VARCHAR(255) NOT NULL,
    Institution_id INT NOT NULL
);

-- Table: ecole.Teacher
CREATE TABLE ecole.Teacher (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NULL,
    specialization VARCHAR(255) NULL
);

-- Table: ecole.TeacherCourse
CREATE TABLE ecole.TeacherCourse (
    Teacher_id INT NOT NULL,
    Course_id INT NOT NULL,
    PRIMARY KEY (Teacher_id, Course_id)
);

-- Table: ecole.TeacherPayment
CREATE TABLE ecole.TeacherPayment (
    id SERIAL PRIMARY KEY,
    payment_date DATE NULL,
    Teacher_id INT NOT NULL,
    TeacherPaymentPlan_id INT NOT NULL
);

-- Table: ecole.TeacherPaymentPlan
CREATE TABLE ecole.TeacherPaymentPlan (
    id SERIAL PRIMARY KEY,
    plan_name VARCHAR(255) NOT NULL,
    description TEXT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_frequency VARCHAR(255) NOT NULL,
    Institution_id INT NOT NULL
);
