PROGRAM SarahRevere(INPUT, OUTPUT);
USES
  Dos;
VAR
  Str: STRING;
  Lanterns: CHAR;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  Str := GetEnv('QUERY_STRING');
  IF (Pos('lanterns', Str) <> 0) AND ((Pos('lanterns', Str) + 9 = length(Str)) OR (Str[Pos('lanterns', Str) + 10] = '&'))
  THEN
    Lanterns := Str[Pos('lanterns', Str) + 9]
  ELSE
    Lanterns := '0';
  IF Lanterns > '0'
  THEN
    IF Lanterns < '3'
    THEN
      WRITE('The British are coming by ');
  IF Lanterns = '1'
  THEN
    WRITELN('land.')
  ELSE
    IF Lanterns = '2'
    THEN
      WRITELN('sea.')
    ELSE
      WRITELN('The North Church shows only ''', Lanterns, '''.')
END.
