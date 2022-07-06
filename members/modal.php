//modal.php
<!-- Add Modal -->
<div class="myModal" v-if="showAddModal">
    <div class="modalContainer">
        <div class="modalHeader">
            <span class="headerTitle">Add New Member</span>
            <button class="closeBtn pull-right" @click="showAddModal = false">×</button>
        </div>
        <div class="modalBody">
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" class="form-control" v-model="newMember.firstname">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" class="form-control" v-model="newMember.lastname">
            </div>
        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-right">
                <button class="btn btn-default" @click="showAddModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-primary" @click="showAddModal = false; saveMember();"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
            </div>
        </div>
    </div>
</div>
 
<!-- Edit Modal -->
<div class="myModal" v-if="showEditModal">
    <div class="modalContainer">
        <div class="editHeader">
            <span class="headerTitle">Edit Member</span>
            <button class="closeEditBtn pull-right" @click="showEditModal = false">×</button>
        </div>
        <div class="modalBody">
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" class="form-control" v-model="clickMember.firstname">
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" class="form-control" v-model="clickMember.lastname">
            </div>
        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-right">
                <button class="btn btn-default" @click="showEditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success" @click="showEditModal = false; updateMember();"><span class="glyphicon glyphicon-check"></span> Save</button>
            </div>
        </div>
    </div>
</div>
 
<!-- Delete Modal -->
<div class="myModal" v-if="showDeleteModal">
    <div class="modalContainer">
        <div class="deleteHeader">
            <span class="headerTitle">Delete Member</span>
            <button class="closeDelBtn pull-right" @click="showDeleteModal = false">×</button>
        </div>
        <div class="modalBody">
            <h5 class="text-center">Are you sure you want to Delete</h5>
            <h2 class="text-center">{{clickMember.firstname}} {{clickMember.lastname}}</h2>
        </div>
        <hr>
        <div class="modalFooter">
            <div class="footerBtn pull-right">
                <button class="btn btn-default" @click="showDeleteModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger" @click="showDeleteModal = false; deleteMember(); "><span class="glyphicon glyphicon-trash"></span> Yes</button>
            </div>
        </div>
    </div>
</div>

<style>
.myModal{
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background: rgba(0, 0, 0, 0.4);
}
 
.modalContainer{
    width: 555px;
    background: #FFFFFF;
    margin:auto;
    margin-top:50px;
}
 
.modalHeader{
    padding:10px;
    background: #008CBA;
    color: #FFFFFF;
    height:50px;
    font-size:20px;
    padding-left:15px;
}
 
.editHeader{
    padding:10px;
    background: #4CAF50;
    color: #FFFFFF;
    height:50px;
    font-size:20px;
    padding-left:15px;
}
 
.deleteHeader{
    padding:10px;
    background: #f44336;
    color: #FFFFFF;
    height:50px;
    font-size:20px;
    padding-left:15px;
}
 
.modalBody{
    padding:40px;
}
 
.modalFooter{
    height:36px;
}
 
.footerBtn{
    margin-right:10px;
    margin-top:-9px;
}
 
.closeBtn{
    background: #008CBA;
    color: #FFFFFF;
    border:none;
}
 
.closeEditBtn{
    background: #4CAF50;
    color: #FFFFFF;
    border:none;
}
 
.closeDelBtn{
    background: #f44336;
    color: #FFFFFF;
    border:none;
}

</style>