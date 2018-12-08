CREATE OR REPLACE FUNCTION filtreMessages(debut_message text,fin_message text,id text) returns SETOF fredouil.message as $$
DECLARE 
    ma_ligne record;
BEGIN        
    FOR ma_ligne IN execute 'select * from fredouil.message where destinataire = '|| id ||' order by id desc OFFSET '|| debut ||' ROWS FETCH FIRST '|| fin ||' ROW ONLY;'
    LOOP
            RETURN NEXT ma_ligne;
    END LOOP; 
END; $$ 
LANGUAGE 'plpgsql';
