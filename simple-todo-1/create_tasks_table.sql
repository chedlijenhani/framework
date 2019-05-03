
-- sqlite3 todo.sqlite < create_tasks_table.sql

CREATE TABLE IF NOT EXISTS todos (
  "tid" INTEGER PRIMARY KEY AUTOINCREMENT,
  "todo" TEXT NOT NULL
);

INSERT INTO `todos` VALUES (1,'devenir un pro du Web');
INSERT INTO `todos` VALUES (2,'monter une startup');
INSERT INTO `todos` VALUES (3,'devenir maître du monde');
