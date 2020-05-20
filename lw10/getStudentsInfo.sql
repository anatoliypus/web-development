SELECT 
    Students.student_name, 
    Students.student_surname, 
    Student_groups.group_name,
    Faculties.faculty_name
FROM 
    Students
JOIN 
    Student_groups
ON
    Students.student_group_id = Student_groups.group_id
JOIN 
    Faculties
ON
    Student_groups.group_faculty_id = Faculties.faculty_id
WHERE 
    student_name = 'Anatoliy' AND student_surname = 'Pushkarev';


