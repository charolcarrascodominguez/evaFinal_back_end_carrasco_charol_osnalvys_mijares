USE todocamisetas;

-- =========================
-- CLIENTES (10)
-- =========================

INSERT INTO clientes (nombre_comercial, rut, direccion, categoria, contacto_nombre, contacto_email, porcentaje_oferta)
VALUES
('90minutos', '76.111.111-1', 'Providencia, Santiago', 'Preferencial', 'Juan Perez', 'juan@90minutos.cl', 10),
('tdeportes', '76.222.222-2', 'Las Condes, Santiago', 'Regular', 'Maria Lopez', 'maria@tdeportes.cl', 0),
('FutbolPro', '76.333.333-3', 'Maipu, Santiago', 'Regular', 'Carlos Diaz', 'carlos@futbolpro.cl', 5),
('GolStore', '76.444.444-4', 'Valparaiso, V Region', 'Preferencial', 'Ana Torres', 'ana@golstore.cl', 15),
('DeportesSur', '76.555.555-5', 'Concepcion, Biobio', 'Regular', 'Luis Soto', 'luis@deportessur.cl', 0),
('EliteSoccer', '76.666.666-6', 'La Serena, IV Region', 'Preferencial', 'Camila Fuentes', 'camila@elite.cl', 20),
('BalonLatam', '76.777.777-7', 'Temuco, Araucania', 'Regular', 'Diego Rojas', 'diego@balon.cl', 0),
('ZonaFutbol', '76.888.888-8', 'Rancagua, O Higgins', 'Preferencial', 'Paula Vega', 'paula@zona.cl', 12),
('TopGol', '76.999.999-9', 'Talca, Maule', 'Regular', 'Andres Molina', 'andres@topgol.cl', 0),
('LigaMayorista', '76.000.000-0', 'Iquique, Tarapaca', 'Preferencial', 'Sofia Reyes', 'sofia@liga.cl', 18);

-- =========================
-- TALLAS (10)
-- =========================

INSERT INTO tallas (nombre) VALUES
('XS'), ('S'), ('M'), ('L'), ('XL'),
('XXL'), ('Niño S'), ('Niño M'), ('Niño L'), ('Femenino M');

-- =========================
-- CAMISETAS (30)
-- =========================

INSERT INTO camisetas (titulo, club, pais, tipo, color, precio, precio_oferta, detalles, codigo_producto)
VALUES
('Camiseta Local 2025 - Chile', 'Seleccion Chilena', 'Chile', 'Local', 'Rojo', 45000, 39000, 'Edicion aniversario', 'SCL2025L'),
('Camiseta Visita 2025 - Chile', 'Seleccion Chilena', 'Chile', 'Visita', 'Blanco', 45000, NULL, 'Modelo alternativo', 'SCL2025V'),
('Camiseta Local 2025 - Colo Colo', 'Colo Colo', 'Chile', 'Local', 'Blanco', 48000, 42000, 'Temporada oficial', 'CC2025L'),
('Camiseta Visita 2025 - Colo Colo', 'Colo Colo', 'Chile', 'Visita', 'Negro', 48000, NULL, 'Nueva temporada', 'CC2025V'),
('Camiseta Local 2025 - U de Chile', 'Universidad de Chile', 'Chile', 'Local', 'Azul', 47000, 41000, 'Version premium', 'UCH2025L'),
('Camiseta Visita 2025 - U de Chile', 'Universidad de Chile', 'Chile', 'Visita', 'Rojo', 47000, NULL, 'Version alternativa', 'UCH2025V'),

('Camiseta Local 2025 - Real Madrid', 'Real Madrid', 'España', 'Local', 'Blanco', 65000, 59000, 'La Liga', 'RM2025L'),
('Camiseta Visita 2025 - Real Madrid', 'Real Madrid', 'España', 'Visita', 'Negro', 65000, NULL, 'Champions', 'RM2025V'),
('Camiseta Local 2025 - Barcelona', 'Barcelona', 'España', 'Local', 'Azul/Grana', 64000, 60000, 'Liga 2025', 'BAR2025L'),
('Camiseta Visita 2025 - Barcelona', 'Barcelona', 'España', 'Visita', 'Blanco', 64000, NULL, 'Temporada europea', 'BAR2025V'),

('Camiseta Local 2025 - Manchester City', 'Manchester City', 'Inglaterra', 'Local', 'Celeste', 66000, 61000, 'Premier League', 'MC2025L'),
('Camiseta Visita 2025 - Manchester City', 'Manchester City', 'Inglaterra', 'Visita', 'Negro', 66000, NULL, 'Temporada 2025', 'MC2025V'),

('Camiseta Local 2025 - PSG', 'PSG', 'Francia', 'Local', 'Azul', 67000, 63000, 'Ligue 1', 'PSG2025L'),
('Camiseta Visita 2025 - PSG', 'PSG', 'Francia', 'Visita', 'Rojo', 67000, NULL, 'Europa Edition', 'PSG2025V'),

('Camiseta Local 2025 - Juventus', 'Juventus', 'Italia', 'Local', 'Blanco/Negro', 62000, 58000, 'Serie A', 'JUV2025L'),
('Camiseta Visita 2025 - Juventus', 'Juventus', 'Italia', 'Visita', 'Amarillo', 62000, NULL, 'Temporada 2025', 'JUV2025V'),

('Camiseta Local 2025 - Bayern Munich', 'Bayern Munich', 'Alemania', 'Local', 'Rojo', 63000, 59000, 'Bundesliga', 'BM2025L'),
('Camiseta Visita 2025 - Bayern Munich', 'Bayern Munich', 'Alemania', 'Visita', 'Blanco', 63000, NULL, 'Temporada europea', 'BM2025V'),

('Camiseta Femenino Local 2025 - Chile', 'Seleccion Chilena', 'Chile', 'Femenino Local', 'Rojo', 42000, 38000, 'Equipo femenino', 'SCLF2025'),
('Camiseta Niño Local 2025 - Chile', 'Seleccion Chilena', 'Chile', 'Niño', 'Rojo', 35000, NULL, 'Linea infantil', 'SCLN2025');
