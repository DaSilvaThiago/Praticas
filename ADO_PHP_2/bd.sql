CREATE TABLE IF NOT EXISTS pessoa (
    chave INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    login TEXT UNIQUE NOT NULL,
    dt_nascimento REAL NOT NULL CHECK(dt_nascimento - datetime() > 17 AND dt_nascimento - datetime() < 100 ),
    url_foto TEXT CHECK(url_foto >= 10),
    interesse_homens INTEGER NOT NULL CHECK(login = 0 OR login = 1),
    interesse_mulheres INTEGER NOT NULL,
    sexo TEXT NOT NULL CHECK(sexo = 'M' OR sexo = 'F')
)
