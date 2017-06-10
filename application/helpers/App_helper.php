<?php

function chklokerstts($id = null) {
	if($id === "1"){
		return "<span class=\"label label-sm label-success\">AKTIF</span>";
	}else{
		return "<span class=\"label label-sm label-warning\">Tidak Aktif</span>";
	}
}