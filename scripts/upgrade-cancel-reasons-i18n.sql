-- Upgrade script: rename cancellation_reason keys to language-neutral English
-- (was hardcoded in French: 'concours', 'absence_moniteur', 'formation', 'meteo', 'autre').
-- Run once on existing installations after deploying the i18n refactor.

UPDATE galette_courses_sessions SET cancellation_reason = 'competition'       WHERE cancellation_reason = 'concours';
UPDATE galette_courses_sessions SET cancellation_reason = 'instructor_absent' WHERE cancellation_reason = 'absence_moniteur';
UPDATE galette_courses_sessions SET cancellation_reason = 'training'          WHERE cancellation_reason = 'formation';
UPDATE galette_courses_sessions SET cancellation_reason = 'weather'           WHERE cancellation_reason = 'meteo';
UPDATE galette_courses_sessions SET cancellation_reason = 'other'             WHERE cancellation_reason = 'autre';
