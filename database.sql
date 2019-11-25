CREATE TABLE IF NOT EXISTS Encuestado(
    id_enc int(10) not null auto_increment,
    code int(10) not null,
    region enum('Tapeixtles', 'Salagua', 'Naranjo', 'El Colomo', 'Miramar', 'Valle de las Garzas', 'Brisas', 'Santiago', 'Manzanillo'),
    trabajo VARCHAR(100) not null,
    PRIMARY KEY(id_enc, code),
    UNIQUE KEY (code)
)engine=InnoDB default charset=UTF8 default collate=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Pregunta(
    pregunta_id int(2) not null,
    pregunta VARCHAR(350) not null,
    tema enum('Sismo', 'Incendio', 'Contingencia'),
    PRIMARY KEY (pregunta_id),
    UNIQUE KEY (pregunta_id)
)engine=InnoDB default charset=UTF8 default collate=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS Respuesta(
    respuesta_id int(10) not null auto_increment,
    preguntaID int(2) not null,
    respuesta int(2) not null,
    encuestado int(10) not null,
    PRIMARY KEY (respuesta_id),
    UNIQUE KEY (respuesta_id),
    index fk_preguntaID_idx (preguntaID ASC),
    CONSTRAINT fk_preguntaID
        FOREIGN KEY (preguntaID)
        REFERENCES Pregunta (pregunta_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    INDEX fk_encuestado_idx (encuestado ASC),
    CONSTRAINT fk_encuestado
        FOREIGN KEY (encuestado)
        REFERENCES Encuestado (code)
        ON DELETE CASCADE
        ON UPDATE CASCADE
)engine=InnoDB default charset=UTF8 default collate=utf8_unicode_ci;