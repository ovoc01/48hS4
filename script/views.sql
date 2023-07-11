CREATE OR REPLACE VIEW v_utilisateur_valide AS
    SELECT * FROM user WHERE status = 10;

CREATE OR REPLACE VIEW v_code_valide AS
    SELECT * FROM code WHERE status = 10;

CREATE OR REPLACE VIEW v_transation_sortie AS
    select * from user_transaction where status = 10;

CREATE OR REPLACE VIEW v_transation_entrant AS
    select * from user_transaction where status = 0;

CREATE OR REPLACE VIEW v_user_balance AS
SELECT t.entrant_user_id AS user_id, SUM(t.amount) AS balance
FROM (
    SELECT entrant_user_id, amount FROM v_transation_entrant
    UNION ALL
    SELECT sortie_user_id, -amount FROM v_transation_sortie
) AS t
GROUP BY t.entrant_user_id;


CREATE OR REPLACE VIEW v_code_usage_count AS
SELECT ch.idCode, c.intitule, COUNT(*) AS usage_count
FROM code_history ch
JOIN code c ON ch.idCode = c.idCode
GROUP BY ch.idCode, c.intitule;
