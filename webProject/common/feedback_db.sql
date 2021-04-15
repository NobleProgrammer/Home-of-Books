Create table feedback(
fname varchar (255),
lname varchar(255),
email varchar (255) not null primary key,
isPublisher char(1)
type varchar(255),
textf varchar(255) not null,
flag char(1)
);

insert into feedback (name, email, gender, type, textf)
	values('lool','zubaidi@pm.me','male',"don't know", 'hehehe')