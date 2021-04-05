<template v-if="menu==1">
    <div class="container ">
        <div class="col-md-4">
        </div><br>
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <oee-component></oee-component>                    
                </div>
            </div>
    </div>
</template>

<template v-if="menu==2">
    <div class="container ">
        <div class="col-md-4">

        </div><br>
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <alarmas-component></alarmas-component>                
                </div>
            </div>
    </div>
</template>

<template v-if="menu==3">
    <div class="container ">
        <div class="col-md-4">

        </div><br>
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <reportes-component></reportes-component>              
                </div>
            </div>
      
    </div>
</template>


<template v-if="menu==5">
    <div class="container ">
    <div class="col-md-4">

</div><br>
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <usuarios-component></usuarios-component>              
                </div>
            </div>    
</template>

<template v-if="menu==6">
    <div class="container ">
        <div class="col-md-4">
        </div><br>
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <simulacion-component></simulacion-component>            
                </div>
            </div>   
     
    </div>
</template>