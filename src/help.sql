ALTER TABLE users_bkp MODIFY COLUMN id int(11) NOT NULL, 
   DROP PRIMARY KEY, ENGINE = MyISAM, ADD action VARCHAR(8) DEFAULT 'insert' AFTER modified_by , 
   ADD revision INT(6) NOT NULL AUTO_INCREMENT AFTER action,
   ADD action_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER revision,
   ADD PRIMARY KEY (id, revision);
   
   
   CREATE TRIGGER emp__ai AFTER INSERT ON USERS FOR EACH ROW
    INSERT INTO users_bkp SELECT 'insert', NULL, NOW(), d.* , (select user_id from tblaction where atable='employees' and pid=d.id)
    FROM MyDB.data AS d WHERE d.id = NEW.id;
	
	
CREATE TRIGGER emp__au AFTER UPDATE ON users FOR EACH ROW
    INSERT INTO users_bkp SELECT 'update', NULL, NOW(), d.*, (select user_id from tblaction where atable='employees' and pid=d.id)
    FROM users AS d WHERE d.id = NEW.id;	
	
	
CREATE VIEW data_history_changes AS 


   SELECT t2.dt_datetime, t2.action, t1.id as 'row id', 
   IF(t1.email = t2.email, t1.email, CONCAT(t1.email, " to ", t2.email)) as a_column
   FROM users_bkp as t1 INNER join users_bkp as t2 on t1.id = t2.id 
   WHERE (t1.revision = 1 AND t2.revision = 1) OR t2.revision = t1.revision+1
   ORDER BY t1.id ASC, t2.revision ASC	
   
   insert 4
   update 4 3