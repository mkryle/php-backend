# php-backend



URL/Request		Method	Response


/getall.php		GET	Shows all


/getbyid.php?theID=xx	GET	Show by ID		-where xx is the ID.


/getbywho.php?namn=xx	GET	Show by Who		-where xx is the name.


/getbykategori.php	GET	Show by			-where xx is the Kategori. 
?kategori=xx			Kategori


/make.php		POST	Createpost		-where "namn" "kategori" & "createdby"-
							from form, needs to be filled in.


/delete.php?theID=xx	DELETE	Delete by id		-where xx is the ID.



/deletewho.php?namn=xx	DELETE	Delete all from		-where xx is the name
			name


/update.php		UPDATE	Update by ID		-where "namn" "kategori" & "createdby"-
							and theID, from form needs to be filled in.
