SELECT 
    Students.student_name,
    Students.student_surname,
    Student_groups.group_name
FROM 
    Students 
JOIN  
    Student_groups 
ON
    Students.student_group_id = Student_groups.group_id
WHERE 
    group_name = 'Programming-1';