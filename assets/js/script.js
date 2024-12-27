const addActivityForm = document.getElementById('add-activity-form');
const openActivityPopup = document.getElementById('btn-add-activity');
const btnConfirmActivity = document.getElementById('confirm-add-activity');
const btnCancelActivity = document.getElementById('cancel-add-activity');


btnCancelActivity.addEventListener('click', function(){
    addActivityForm.classList.add('hidden');
});

openActivityPopup.addEventListener('click', function(){
    addActivityForm.classList.remove('hidden');
});






// ADMIN DASHBOARD ========================================


const adminManageActivity = document.getElementById('admin-manage-activities');
const adminManageBooking = document.getElementById('admin-manage-bookings');
const adminManageMembers = document.getElementById('admin-manage-members');
const adminManageStatistics = document.getElementById('admin-manage-statistics');

const optionActivity = document.getElementById('admin-activities-option');
const optionBooking = document.getElementById('admin-bookings-option');
const optionMembers = document.getElementById('admin-members-option');
const optionStatistics = document.getElementById('admin-statistics-option');


optionActivity.addEventListener('click', function(){
    optionActivity.classList.add('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    adminManageActivity.classList.remove('hidden');
    adminManageBooking.classList.add('hidden');
    adminManageMembers.classList.add('hidden');
    adminManageStatistics.classList.add('hidden');
});


optionBooking.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.add('text-orange-500');
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    adminManageActivity.classList.add('hidden');
    adminManageBooking.classList.remove('hidden');
    adminManageMembers.classList.add('hidden');
    adminManageStatistics.classList.add('hidden');
});


optionMembers.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionMembers.classList.add('text-orange-500');
    optionStatistics.classList.remove('text-orange-500');

    adminManageActivity.classList.add('hidden');
    adminManageBooking.classList.add('hidden');
    adminManageMembers.classList.remove('hidden');
    adminManageStatistics.classList.add('hidden');
});


optionStatistics.addEventListener('click', function(){
    optionActivity.classList.remove('text-orange-500');
    optionBooking.classList.remove('text-orange-500');
    optionMembers.classList.remove('text-orange-500');
    optionStatistics.classList.add('text-orange-500');

    adminManageActivity.classList.add('hidden');
    adminManageBooking.classList.add('hidden');
    adminManageMembers.classList.add('hidden');
    adminManageStatistics.classList.remove('hidden');
});