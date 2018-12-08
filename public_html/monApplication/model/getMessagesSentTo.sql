CREATE OR REPLACE FUNCTION getMessagesSentTo(id text,num text) returns SETOF fredouil.message as $$
DECLARE 
    ma_ligne record;
BEGIN
    FOR ma_ligne IN execute 'select * from fredouil.message where destinataire = '|| id ||' order by id desc fetch first '|| num ||' rows only'
    LOOP
            RETURN NEXT ma_ligne;
    END LOOP;
END;
$$ language plpgsql;
