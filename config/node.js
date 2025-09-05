const odbc = require('odbc');

async function connectToDatabase() {
    try {
    
        const connection = await odbc.connect('DSN=QDSN_192.168.5.5;UID=ANALISTA;PWD=PROF$;System=192.168.5.5');
        console.log("Conexión exitosa.");

       
        const result = await connection.query('SELECT * FROM SPEED400PI.PO_TERRENO');
        console.log(result);
    } catch (error) {
        console.error("Error de conexión:", error);
    }
}

connectToDatabase();
