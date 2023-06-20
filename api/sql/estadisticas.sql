-- SQLBook: Code
CREATE DATABASE alquilartemis;

USE alquilartemis;   

CREATE TABLE empleados (
    empleado_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    puesto VARCHAR(255)
);

CREATE TABLE producto (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255),
    Descripcion VARCHAR(255),
    Precio DECIMAL(10, 2),
    Cantidad INT
);

CREATE TABLE cliente (
    cliente_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

CREATE TABLE obra (
    obra_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    ciudad VARCHAR(255),
    estado VARCHAR(255),
    fecha_inicio DATE,
    fecha_fin DATE
);

CREATE TABLE salida (
    salida_id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT,
    fecha_salida DATE,
    hora_salida TIME,
    subtotalPeso DECIMAL(10, 2) NOT NULL,
    placatransporte VARCHAR(55) NOT NULL,
    observaciones VARCHAR(255) NOT NULL,
    CONSTRAINT fk_cliente_id FOREIGN KEY (cliente_id) REFERENCES cliente(cliente_id)
);

CREATE TABLE salida_detalle (
    salida_detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    salida_id INT,
    producto_id INT,
    empleado_id INT,
    cantidad_salida INT NOT NULL,
    cantidad_propia INT NOT NULL,
    cantidad_subalquilada INT NOT NULL,
    valorUnidad DECIMAL(10, 2) NOT NULL,
    fecha_standBy DATE NOT NULL,
    estado VARCHAR(55) NOT NULL,
    valorTotal DECIMAL(10, 2) NOT NULL,
    CONSTRAINT fk_salida_id FOREIGN KEY (salida_id) REFERENCES salida(salida_id),
    CONSTRAINT fk_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id),
    CONSTRAINT fk_empleado_id FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id)
);

CREATE TABLE entrada (
    entrada_id INT PRIMARY KEY AUTO_INCREMENT,
    salida_id INT,
    empleado_id INT,
    cliente_id INT,
    fecha_entrada DATETIME NOT NULL,
    hora_entrada TIME NOT NULL,
    observaciones VARCHAR(255) NOT NULL,
    CONSTRAINT fk_salida_id1 FOREIGN KEY (salida_id) REFERENCES salida(salida_id),
    CONSTRAINT fk_empleado_id1 FOREIGN KEY (empleado_id) REFERENCES empleados(empleado_id),
    CONSTRAINT fk_cliente_id1 FOREIGN KEY (cliente_id) REFERENCES cliente(cliente_id)
);

CREATE TABLE entrada_detalle (
    entrada_detalle_id INT PRIMARY KEY AUTO_INCREMENT,
    entrada_id INT,
    producto_id INT,
    obra_id INT,
    cliente_id INT,
    entrada_cantidad INT NOT NULL,
    entrada_cantidad_propia INT NOT NULL,
    entrada_cantidad_subalquilada INT NOT NULL,
    estado VARCHAR(55) NOT NULL,
    CONSTRAINT fk_entrada_id FOREIGN KEY (entrada_id) REFERENCES entrada(entrada_id),
    CONSTRAINT fk_producto_id1 FOREIGN KEY (producto_id) REFERENCES producto(id),
    CONSTRAINT fk_obra_id FOREIGN KEY (obra_id) REFERENCES obra(obra_id),
    CONSTRAINT fk_cliente_id2 FOREIGN KEY (cliente_id) REFERENCES cliente(cliente_id)
);

CREATE TABLE inventario (
    inventario_id INT PRIMARY KEY AUTO_INCREMENT,
    producto_id INT,
    CantidadInicial INT NOT NULL,
    CantidadIngreso INT NOT NULL,
    CantidadSalidas INT NOT NULL,
    CantidadFinal INT NOT NULL,
    FechaInventario DATE NOT NULL,
    TipoOperacion VARCHAR(55) NOT NULL,
    CONSTRAINT fk_producto_id2 FOREIGN KEY (producto_id) REFERENCES producto(id)
);


