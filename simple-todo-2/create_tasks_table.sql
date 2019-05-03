
-- sqlite3 todo.sqlite < create_tasks_table.sql

BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS todos (
  "tid" INTEGER PRIMARY KEY AUTOINCREMENT,
  "todo" TEXT NOT NULL,
  `is_complete`	INTEGER NOT NULL DEFAULT 0
);

INSERT INTO `todos` VALUES (1,'devenir un pro du Web',0);
INSERT INTO `todos` VALUES (2,'monter une startup',0);
INSERT INTO `todos` VALUES (3,'devenir maître du monde',0);
INSERT INTO `todos` VALUES (4,'terminer le hp 2-3',1);
COMMIT;
