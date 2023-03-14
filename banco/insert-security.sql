update usuarios set senha = md5(senha)
where id between 1 and 5;