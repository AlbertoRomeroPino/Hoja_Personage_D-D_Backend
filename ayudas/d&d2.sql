-- 1. Tabla de usuarios (quién posee la cuenta)
CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    nombre_usuario VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL
);

-- Catálogo de Alineamientos (Ej: Legal Bueno, Caótico Malvado)
CREATE TABLE catalogo_alineamientos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT
);

-- Catálogo de Razas (Ej: Humano, Elfo, Enano)
CREATE TABLE catalogo_razas (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    velocidad_base INT DEFAULT 30, -- Puedes automatizar la velocidad desde aquí
    descripcion TEXT
);

-- Catálogo de Trasfondos (Ej: Sabio, Criminal, Héroe del Pueblo)
CREATE TABLE catalogo_transfondos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT
);

-- 2. Tabla principal del personaje
CREATE TABLE personajes (
    id SERIAL PRIMARY KEY,
    usuario_id INT REFERENCES usuarios (id) ON DELETE CASCADE,
    
    -- Cabecera
    nombre VARCHAR(100) NOT NULL,
    clase_y_nivel VARCHAR(100),
    alineamiento_id INT REFERENCES catalogo_alineamientos (id),
    raza_id INT REFERENCES catalogo_razas (id),
    transfondo_id INT REFERENCES catalogo_transfondos (id),
    puntos_experiencia INT DEFAULT 0,
    
    -- Combate y Salud (PG = Puntos de Golpe)
    pg_maximos INT NOT NULL,
    pg_actuales INT NOT NULL,
    pg_temporales INT DEFAULT 0,
    clase_armadura INT,
    velocidad INT,
    dados_golpe_total VARCHAR(20),
    dados_golpe_disponibles INT,
    
    -- Rasgos de interpretación (Roleplay)
    rasgos_personalidad TEXT,
    ideales TEXT,
    vinculos TEXT,
    defectos TEXT,
    
    -- Economía básica y Equipo
    monedas_cobre INT DEFAULT 0,
    monedas_plata INT DEFAULT 0,
    monedas_oro INT DEFAULT 0,
    monedas_platino INT DEFAULT 0,
    notas_equipo TEXT
);

-- 3. Tabla de atributos y tiradas de salvación (VERSIÓN UNIFICADA)
CREATE TABLE atributos_personaje (
    personaje_id INT PRIMARY KEY REFERENCES personajes (id) ON DELETE CASCADE,
    
    -- Puntuaciones base
    fuerza INT DEFAULT 10,
    destreza INT DEFAULT 10,
    constitucion INT DEFAULT 10,
    inteligencia INT DEFAULT 10,
    sabiduria INT DEFAULT 10,
    carisma INT DEFAULT 10,
    
    -- Competencias en Tiradas de Salvación
    salvacion_fuerza BOOLEAN DEFAULT FALSE,
    salvacion_destreza BOOLEAN DEFAULT FALSE,
    salvacion_constitucion BOOLEAN DEFAULT FALSE,
    salvacion_inteligencia BOOLEAN DEFAULT FALSE,
    salvacion_sabiduria BOOLEAN DEFAULT FALSE,
    salvacion_carisma BOOLEAN DEFAULT FALSE
);

-- 4. Catálogo estático de habilidades
CREATE TABLE catalogo_habilidades (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    atributo_regente VARCHAR(20)
);

-- 5. Tabla intermedia: Personajes <-> Habilidades
CREATE TABLE competencias_habilidades (
    personaje_id INT REFERENCES personajes (id) ON DELETE CASCADE,
    habilidad_id INT REFERENCES catalogo_habilidades (id) ON DELETE CASCADE,
    es_competente BOOLEAN DEFAULT FALSE,
    es_experto BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (personaje_id, habilidad_id)
);

-- 6. Catálogo estático de objetos
CREATE TABLE catalogo_objetos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    peso DECIMAL(5,2) DEFAULT 0,
    daño VARCHAR(20),
    descripcion TEXT
);

-- 7. Tabla intermedia: Personajes <-> Objetos (Inventario)
CREATE TABLE inventario (
    personaje_id INT REFERENCES personajes(id) ON DELETE CASCADE,
    objeto_id INT REFERENCES catalogo_objetos(id) ON DELETE CASCADE,
    cantidad INT DEFAULT 1,
    equipado BOOLEAN DEFAULT FALSE,
    PRIMARY KEY (personaje_id, objeto_id)
);

-- 8. Catálogo estático de conjuros
CREATE TABLE catalogo_conjuros (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    nivel INT DEFAULT 0,
    escuela VARCHAR(50),
    tiempo_lanzamiento VARCHAR(50),
    descripcion TEXT
);

-- 9. Tabla intermedia: Personajes <-> Conjuros (Libro de magia)
CREATE TABLE conjuros_conocidos (
    personaje_id INT REFERENCES personajes(id) ON DELETE CASCADE,
    conjuro_id INT REFERENCES catalogo_conjuros(id) ON DELETE CASCADE,
    preparado BOOLEAN DEFAULT TRUE,
    PRIMARY KEY (personaje_id, conjuro_id)
);