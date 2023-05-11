CREATE TABLE IF NOT EXISTS pessoa (
    chave INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    login TEXT UNIQUE NOT NULL,
    dt_nascimento REAL NOT NULL CHECK(date(dt_nascimento)),
    url_foto TEXT CHECK(url_foto >=10 AND url_foto <=1000),
    interesse_homens INTEGER NOT NULL CHECK(interesse_homens = 0 OR interesse_homens = 1),
    interesse_mulheres INTEGER NOT NULL CHECK(interesse_mulheres = 0 OR interesse_mulheres = 1),
    sexo TEXT NOT NULL CHECK(sexo = 'M' OR sexo = 'F')
)
