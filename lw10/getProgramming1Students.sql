SELECT 
    s.student_name,
    s.student_surname,
    sg.group_name
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
WHERE 
    group_name = 'Programming-1';