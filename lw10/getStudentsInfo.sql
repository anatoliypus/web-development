SELECT 
    s.student_name, 
    s.student_surname, 
    sg.group_name,
    f.faculty_name
FROM 
    student
AS 
    s
JOIN 
    student_group
AS 
    sg
ON
    s.student_group_id = sg.group_id
JOIN 
    faculty
AS 
    f
ON
    sg.group_faculty_id = f.faculty_id
WHERE 
    student_name = 'Anatoliy' AND student_surname = 'Pushkarev';


