import alert from 'sweetalert2';
import "sweetalert2/dist/sweetalert2.min.js"
export function apiResponse(response){
    if (response.code == 200 || response.code == 201) {
        alert.fire({
            title: response.data,
            icon: 'success',
            confirmButtonText: "Ok",
            timer: 1000
        });
    }else if(response.code == 401){
        alert.fire({
            title: response.data,
            icon: 'warning',
            confirmButtonText: "Ok"
        });
        location.reload();
    }else if(response.code == 422){
        alert.fire({
            title: response.data,
            icon: 'warning',
            confirmButtonText: "Ok",
        });
    }else{
        alert.fire({
            title: response.data,
            icon: 'error',
            confirmButtonText: "Ok",
        });
    }
}

export function errorMessage(error){

    alert.fire({
        title: error,
        icon: 'error',
        confirmButtonText: "Ok",
    });

}
