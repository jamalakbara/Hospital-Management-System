const title = document.getElementById('title').innerHTML
const subtitle = document.getElementById('subtitle').innerHTML

const home = document.getElementById('home')
const dashboard = document.getElementById('dashboard')
const patient = document.getElementById('patient')
const partner = document.getElementById('partner')
const option = document.getElementById('option')
const payment = document.getElementById('payment')
const allot = document.getElementById('allot')
const room = document.getElementById('room')
const accountant = document.getElementById('accountant')
const med = document.getElementById('med')
const profile = document.getElementById('profile')

console.log('cek')

if (title == 'Home'){
    home.classList.add('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.remove('active')
}else if (title == 'Dashboard'){
    home.classList.remove('active')
    dashboard.classList.add('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.remove('active')
}else if (title == 'Patient'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.add('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.remove('active')
}else if (title == 'Partner'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.add('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.remove('active')
    if(subtitle == 'Option'){
        option.classList.add('active')
        payment.classList.remove('active')
        allot.classList.remove('active')
    }else if (subtitle == 'Payment'){
        option.classList.remove('active')
        payment.classList.add('active')
        allot.classList.remove('active')
    }else if (subtitle == 'Allotment'){
        payment.classList.remove('active')
        allot.classList.remove('active')
        allot.classList.add('active')
    }
}else if (title == 'Room'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.add('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.remove('active')
}else if (title == 'Accountant'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.add('active')
    med.classList.remove('active')
    profile.classList.remove('active')
}else if (title == 'Medicine'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.add('active')
    profile.classList.remove('active')
}else if (title == 'Profile'){
    home.classList.remove('active')
    dashboard.classList.remove('active')
    patient.classList.remove('active')
    partner.classList.remove('active')
    room.classList.remove('active')
    accountant.classList.remove('active')
    med.classList.remove('active')
    profile.classList.add('active')
}

if(!partner.classList.contains('active')){
    payment.classList.remove('active')
    allot.classList.remove('active')
    allot.classList.remove('active')   
}