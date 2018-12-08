CREATE OR REPLACE FUNCTION filtreTousMessages(debut_message text,fin_message text) returns SETOF fredouil.message as $$
DECLARE 
    ma_ligne record;
BEGIN    
	FOR ma_ligne IN execute 'select * from fredouil.message order by id desc OFFSET '|| debut_message ||' ROWS FETCH FIRST '|| fin_message ||' ROW ONLY;'
    LOOP
		RETURN NEXT ma_ligne;
    END LOOP;
END; $$ 
LANGUAGE 'plpgsql';
