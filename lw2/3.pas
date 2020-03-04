PROGRAM WriteName(INPUT, OUTPUT);
USES
  Dos;
VAR
  Str: STRING;
  I: INTEGER;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Str := GetEnv('QUERY_STRING');
  I := Pos('name=', Str);
  WRITE('Hello, dear ');
  IF (I <> 0) AND ((I + 4 <> length(Str)) AND (Str[I + 5] <> '&'))
  THEN
    BEGIN
      I := I + 5;
      WHILE (I <= length(Str)) AND (Str[I] <> '&')
      DO
        BEGIN
          WRITE(Str[I]);
          I := I + 1
        END
    END
  ELSE
    WRITE('Anonymus');
  WRITELN('#')
END.
