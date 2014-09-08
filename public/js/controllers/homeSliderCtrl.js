/**
 * @author Carlos Carcamo
 */
angular.module('homeSliderApp', [])

.controller('headerCtrl', ['$scope', function($scope){
	$scope.sliderImgs = [
			{
				img:"1.png",
				titulo:"",
				descripcion:""
			},
			{
				img:"2.jpg",
				titulo:"AESIA FMOcc",
				descripcion:"Nueva Dirección"
			},
			{
				img:"3.jpg",
				titulo:"Nuevo Ingreso 2014",
				descripcion:""
			},
			{
				img:"5.jpg",
				titulo:"",
				descripcion:""
			},
			{
				img:"6.jpg",
				titulo:"Inauguración 3er Congreso",
				descripcion:"inauguración 3er Congreso de Ing. y Arquitectura"
			},
			{
				img:"7.jpg",
				titulo:"Visitas técnicas",
				descripcion:""
			},
			{
				img:"8.jpg",
				titulo:"Visitas técnicas",
				descripcion:""
			},
			{
				img:"4.jpg",
				titulo:"CURSO REVIT ARCHITECTURE",
				descripcion:""
			},
			{
				img:"9.jpg",
				titulo:"CSHL",
				descripcion:"Comunidad de Hardware y Software Libre UES FMOcc"
			},
			{
				img:"11.jpg",
				titulo:"Fundación de AESIA",
				descripcion:""
			},
		];
}]);