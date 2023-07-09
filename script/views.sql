CREATE OR REPLACE VIEW v_utilisateur_valide AS
    SELECT * FROM user WHERE status = 10;