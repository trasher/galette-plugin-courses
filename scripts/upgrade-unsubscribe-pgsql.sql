-- Upgrade script (PostgreSQL): add unsubscribe_token to member_preferences
-- Run once on existing PostgreSQL installations that already have the plugin installed.
-- For MySQL/MariaDB installs, use upgrade-unsubscribe.sql instead.

ALTER TABLE galette_courses_member_preferences
    ADD COLUMN unsubscribe_token varchar(48) DEFAULT NULL;
ALTER TABLE galette_courses_member_preferences
    ADD CONSTRAINT uk_courses_mp_token UNIQUE (unsubscribe_token);
