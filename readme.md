Web Dev2 project<br />
OpenLFG<br />
Current live address: http://ec2-54-172-28-134.compute-1.amazonaws.com/index.html<br />

<ul> TODO:
	<li> Launch VM hosted in AWS on EC2</li>
	<li> Install node.js, bootstrap, and sqlite on VM</li>
	<li> Build DB back-end with tables and constraints loaded</li>
	<li> Build triggers/stored procedure to automatically delete records 30-60 mins after insert</li>
	<li> Flesh out front end site</li>
</ul>
<br />
<hr>
<ul> Development information:
	<li> MySQL statements are case sensitive
	<li> Our database is OpenLFG and the table is Posts (select * from OpenLFG.Posts; will work)
</ul>
<br />
Output of describe Posts; <br />
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| PostID   | int(11)      | NO   | PRI | NULL    | auto_increment |
| Region   | varchar(20)  | NO   |     | NULL    |                |
| Platform | varchar(20)  | NO   |     | NULL    |                |
| Game     | varchar(45)  | NO   |     | NULL    |                |
| Event    | varchar(45)  | NO   |     | NULL    |                |
| Username | varchar(45)  | NO   |     | NULL    |                |
| Note     | varchar(140) | YES  |     | NULL    |                |
| PostTime | datetime     | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
