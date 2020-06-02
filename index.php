<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuejs & PHP (Single Page Application)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
        <div class="container" id="app">
                <h2 align="center">{{message}}</h2>
                <div class="row">
                     <div class="col-md-12">
                        <form @submit="submitData" @reset="resetData" method="post">
                            <div class="form-group">
                                <label for="">ชื่อจริง</label>
                                <input type="text" v-model="form.fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">นามสกุล</label>
                                <input type="text" v-model="form.lname" class="form-control">
                            </div>
                            <input type="submit" v-model="form.status" class="btn btn-success">
                            <input type="reset" value="ยกเลิก" class="btn btn-danger">
                        </form>
                     </div>
                </div>
                <div class="py-2">
                    {{form}}
                </div>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">รหัส</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">นามสกุล</th>
                    <th scope="col">แก้ไข</th>
                    <th scope="col">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="row in users">
                        <th scope="row">{{row.id}}</th>
                        <td>{{row.fname}}</td>
                        <td>{{row.lname}}</td>
                        <td>
                            <button class="btn btn-primary" @click="editUser(row.id)">แก้ไข</button>
                        </td>
                        <td>
                            <button class="btn btn-warning" @click="deleteUser(row.id)">ลบ</button>
                        </td>
                    </tr>
                    <tr>
                </tbody>
                </table>
        </div>
</body>
<script src="app.js"></script>
</html>
