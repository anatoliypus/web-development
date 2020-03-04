PROGRAM Parameters(INPUT, OUTPUT);
USES
  Dos;

PROCEDURE Initiaize;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN
END;

FUNCTION GetQueryStringParameter(Par: STRING): STRING;
VAR
  Str, Ans: STRING;
  I: INTEGER;
BEGIN
  Str := GetEnv('QUERY_STRING');
  I := Pos(Par, Str);
  Ans := '';
  IF (I = 0) OR ((Str[I + length(par)] = '&') OR (Str[I + length(par) + 1] = '&'))
  THEN
    Ans := 'error:('
  ELSE
    BEGIN
      I := I + length(par) + 1;
      WHILE (I <= length(Str)) AND (Str[I] <> '&')
      DO
        BEGIN
          Ans := Ans + Str[I];
          I := I + 1
        END
    END;
  GetQueryStringParameter := Ans
END;

BEGIN
  Initiaize;
  WRITELN('First name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.
