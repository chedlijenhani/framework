
-- sqlite3 todo.sqlite < create_tasks_table.sql

BEGIN TRANSACTION;
CREATE TABLE "todos" (
	`tid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`todo`	TEXT NOT NULL,
	`is_complete`	INTEGER NOT NULL DEFAULT 0,
	-- ISO8601 date
	`created`	TEXT NOT NULL,
	-- ISO8601 date
	`updated`	TEXT NOT NULL
);

INSERT INTO `todos` VALUES (4,'devenir un pro du Web',0,'2017-01-01 11:27:21','2017-01-01 11:27:21');
INSERT INTO `todos` VALUES (2,'monter une startup',0,'2017-01-02 11:27:21','2017-01-03 11:27:21');
INSERT INTO `todos` VALUES (3,'devenir maître du monde',0,'2017-01-03 11:27:21','2017-01-03 11:27:21');
INSERT INTO `todos` VALUES (1,'terminer le hp 2-3',1,'2016-12-31 00:00:00','2017-05-29 11:27:21');

COMMIT;
