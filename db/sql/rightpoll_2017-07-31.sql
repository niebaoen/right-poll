# Dump of table user
# ------------------------------------------------------------

ALTER TABLE rightpoll.user
CHANGE id idx int(11);

ALTER TABLE rightpoll.user_guest
CHANGE id idx int(11);

ALTER TABLE rightpoll.log_login
CHANGE user_idx user_id varchar(20);