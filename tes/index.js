const db = 'http://localhost/excalibur/sql.php'
const untukTes = 'ca04a5e26b59240a3a022aa16ad3c0d0'
const axios = require('axios')
const qs = require('qs')
async function init(){
	const {data} = await axios.post(db, qs.stringify({
		id: untukTes,
		kunci: 'semua-data'
	}))
	console.log(data)
}
init()