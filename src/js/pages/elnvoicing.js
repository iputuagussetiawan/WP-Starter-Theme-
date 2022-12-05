import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger); 

window.addEventListener("load", function () {	
    elnvoicingCounter();
    elnvoicingCounter2();
});

function format_number(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};

function counterAction(el,value){
    gsap.from(value, {
        scrollTrigger: ".elnvoicing-counter", 
        duration: 3,
        ease: 'circ.out',
        val: 0,
        roundProps: 'val',
        onUpdate: function() {
            el.innerText = format_number(value.val);
        }
    })
}

function counterAction2(el,value){
    gsap.from(value, {
        scrollTrigger: ".elnvoicing-counter2", 
        duration: 3,
        ease: 'circ.out',
        val: 0,
        roundProps: 'val',
        onUpdate: function() {
            el.innerText = format_number(value.val);
        }
    })
}

function elnvoicingCounter(){
    let worthOfInvoices = document.getElementById('worthOfInvoices'),
    totalworthOfInvoicesValue = {
        val: parseInt(worthOfInvoices.dataset.value)
    };

    let Invoices = document.getElementById('Invoices'),
    InvoicesValue = {
        val: parseInt(Invoices.dataset.value)
    };

    let suppliers = document.getElementById('suppliers'),
    suppliersValue = {
        val: parseInt(suppliers.dataset.value)
    };

    let ofPeppolEInvoices = document.getElementById('ofPeppolEInvoices'),
    ofPeppolEInvoicesValue = {
        val: parseInt(ofPeppolEInvoices.dataset.value)
    };
    counterAction(worthOfInvoices,totalworthOfInvoicesValue);
    counterAction(Invoices,InvoicesValue);
    counterAction(suppliers,suppliersValue);
    counterAction(ofPeppolEInvoices,ofPeppolEInvoicesValue);
}


function elnvoicingCounter2(){
    let worthOfInvoices2 = document.getElementById('worthOfInvoices2'),
    totalworthOfInvoicesValue2 = {
        val: parseInt(worthOfInvoices2.dataset.value)
    };

    let Invoices2 = document.getElementById('Invoices2'),
    InvoicesValue2 = {
        val: parseInt(Invoices2.dataset.value)
    };

    let suppliers2 = document.getElementById('suppliers2'),
    suppliersValue2 = {
        val: parseInt(suppliers2.dataset.value)
    };

    let ofPeppolEInvoices2 = document.getElementById('ofPeppolEInvoices2'),
    ofPeppolEInvoicesValue2 = {
        val: parseInt(ofPeppolEInvoices2.dataset.value)
    };
    counterAction2(worthOfInvoices2,totalworthOfInvoicesValue2);
    counterAction2(Invoices2,InvoicesValue2);
    counterAction2(suppliers2,suppliersValue2);
    counterAction2(ofPeppolEInvoices2,ofPeppolEInvoicesValue2);
}


