create table categories(
    category_id int not null auto_increment,
    category_name varchar(100) not null,

    primary key(category_id)
);

create table city(
    city_id int not null auto_increment,
    city_name varchar(50),

    primary key(city_id)
);

create table products(
    product_id int not null auto_increment,
    product_name varchar(60),
    product_price decimal(7,2),
    product_img varchar(40),
    category_id int not null,

    primary key(product_id),
    foreign key(category_id) references categories(category_id)
);

create table stores(
    store_id int not null auto_increment,
    store_name varchar(80),
    store_phone varchar(9),
    store_email varchar(70),
    store_address varchar(80),
    city_id int not null,

    primary key(store_id),
    foreign key(city_id) references city(city_id)

);

create table stocks(
    store_id int not null,
    product_id int not null,
    quantity int not null,

    foreign key(store_id) references stores(store_id),
    foreign key(product_id) references products(product_id)
);

create table customers(
    customer_id int not null auto_increment,
    customer_name varchar(150) not null,
    customer_email varchar(70),
    customer_phone varchar(9),
    customer_address varchar(100),

    primary key(customer_id)
);

create table active(
    active_id int not null auto_increment,
    activeTrueFalse varchar(10),

    primary key(active_id)
);

create table staffs(
    staff_id int not null auto_increment,
    staff_first_name varchar(100),
    staff_last_name varchar(100),
    staff_phone varchar(9),
    active_id int not null,
    store_id int not null,

    primary key(staff_id),
    foreign key(active_id) references active(active_id),
    foreign key(store_id) references stores(store_id)
);
