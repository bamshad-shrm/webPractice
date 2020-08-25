			angular.module('formExample', [])
			.controller('ExampleController', function($scope,$http) {

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

				//Delete a user.
				$scope.deleteCustomer = function(customer) {
					var Indata = {id:customer.id};
					$http({
						url: "control/delete.php",
						method: "POST",
						params: Indata
					});
				};

				//Edit an user.
				$scope.openEditForm = function(customer) {
					$scope.showEditForm = true;	
					$scope.id = customer.id;
					$scope.firstName = customer.firstName;
					$scope.lastName = customer.lastName;					

					$scope.update = function(id,firstName,lastName) {
						var Indata = {id:id,firstName:firstName,lastName:lastName};
						$http({
							url: "control/editCustomer.php",
							method: "POST",
							params: Indata
						});
						$scope.customer = {};
						$scope.showEditForm = false;
					};
			
				};

				$scope.cancelEdit = function () {
					$scope.showEditForm = false;
				};
			
				//Add new user.
				$scope.openAddForm = function() {
					$scope.showAddForm = true;						

					$scope.add = function(addFirstName,addLastName) {
						var Indata = {firstName:addFirstName,lastName:addLastName};
						$http({
							url: "control/add.php",
							method: "POST",
							params: Indata
						});
						$scope.addFirstName = "";
						$scope.addLastName = "";
						$scope.showAddForm = false;
					};
			
				};

				$scope.cancelAdd = function () {
					$scope.addFirstName = "";
					$scope.addLastName = "";
					$scope.showAddForm = false;
				};

			});
