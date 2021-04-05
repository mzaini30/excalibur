const db = 'http://localhost/excalibur/sql.php'
const untukTes = 'ca04a5e26b59240a3a022aa16ad3c0d0'
const axios = require('axios')
const qs = require('qs')
async function init(){
	// const tambah = await axios.post(db, qs.stringify({
	// 	id: untukTes,
	// 	kunci: 'tambah',
	// 	pertama: 'naik',
	// 	kedua: 'sepeda'
	// }))
	// // console.log(tambah.data)
	// if (tambah) {
	// 	const hasil = await axios.post(db, qs.stringify({
	// 		id: untukTes,
	// 		kunci: 'semua-data'
	// 	}))
	// 	console.log(hasil.data)
	// }
	const hapus = await axios.post(db, qs.stringify({
		id: untukTes,
		kunci: 'hapus-semua'
	}))
	if (hapus) {
		console.log('Semua data sudah dihapus')
	}
}
init()