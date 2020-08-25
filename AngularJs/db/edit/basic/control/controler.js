var app = angular.module('listOfCustomers', []);

app.controller('listControler', function($scope, $http) {

	//Load the list when the page is loaded for first time.
	getCustomers();

	// Reload the list; each one second.
	setInterval(function(){ getCustomers(); }, 1000);



	//get list of customers. 
	function getCustomers(){  
		$http.get("control/getCustomersInfo.php").then(function(response){
			$scope.recievedCustomersInfo = response.data.customersInfo;
		});
	};

	//The edit form must be hidden at the beginning.
	$scope.showEditForm = false;


	//Open the form and get the customer ID from table.
    $scope.editCustomer = function(id,firstName,lastName) {
		$scope.showEditForm = true;

		

		//Submit the edition with ID from table and first name and last name from our form.
		$scope.submitEdit = function (newFirstName,newLastName) {
			var Indata = {id:id,firstName:newFirstName,lastName:newLastName};
			$http({
				url: "control/editCustomer.php",
				method: "POST",
				params: Indata
			})
			$scope.showEditForm = false;

		};

		$scope.cancelEdit = function (firstName,lastName) {
			$scope.showEditForm = false;
		};


    };



});
