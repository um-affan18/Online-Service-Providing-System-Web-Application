  AOS.init();
  var serviceCleaning = ["Common Space Cleaning", "Home Deep Cleaning", "Furniture Cleaning", "Floor Cleaning", "Bathroom Cleaning", "Kitchen Cleaning"];
  var serviceShifting = ["House Shifting", "Office Shifting"];
  var serviceRefrigerator = ["Refrigerator Repair", "Fridge Gas Refill", "Refrigerator Cleaning", "Refrigerator Check Up"];
  var servicePlumbing = ["Water Meter Service", "Sink Repair", "Plumbing Check Up", "Water Tap Service"];
  var servicePainting = ["Interior Painting", "Wood & Furniture Paint", "Enamel Paint", "Damp Repair Solution", "Exterior Paint"];
  var serviceCarRent = ["Inside City", "Outside City"];
  var serviceCarCare = ["Car Servicing", "Car Wash"];
  var serviceAC = ["AC Servicing", "AC Jet Wash", "AC Installation & Uninstallation", "AC Master Service", "AC Water Drop Solution", "AC Cooling Problem"];
  var serviceElectronics = ["Computer Service", "CCTV Camera Service", "TV Service"];
  var serviceTravel = ["Tourist Car Service", "Outside City Travel", "Inside City Travel"];


  function categoryChanged(service) {
      var selectsubCategory = document.getElementById('subCategory');
      var ln = selectsubCategory.length - 1;
      while (ln > 0) {
          selectsubCategory.remove(1); //Remove all but "Select State"
          ln--;
      }


      var selectsubCategoryArray;

      switch (service) {
          case "Cleaning":
              selectsubCategoryArray = serviceCleaning
              break;
          case "Shifting":
              selectsubCategoryArray = serviceShifting
              break;
          case "Refrigerator":
              selectsubCategoryArray = serviceRefrigerator
              break;
          case "Plumbing":
              selectsubCategoryArray = servicePlumbing
              break;
          case "Painting":
              selectsubCategoryArray = servicePainting
              break;
          case "CarRent":
              selectsubCategoryArray = serviceCarRent
              break;
          case "CarCare":
              selectsubCategoryArray = serviceCarCare
              break;
          case "CarRent":
              selectsubCategoryArray = serviceCarRent
              break;
          case "AC":
              selectsubCategoryArray = serviceAC
              break;
          case "Electronics":
              selectsubCategoryArray = serviceElectronics
              break;
          case "Travel":
              selectsubCategoryArray = serviceTravel
              break;
          default:
      }

      for (i = 0; i < selectsubCategoryArray.length; i++) {
          var option = document.createElement('option');
          option.text = selectsubCategoryArray[i];
          option.value = selectsubCategoryArray[i];
          selectsubCategory.add(option);
      }
  }


  
  const getDatePickerTitle = elem => {
   // From the label or the aria-label
   const label = elem.nextElementSibling;
   let titleText = '';
   if (label && label.tagName === 'LABEL') {
     titleText = label.textContent;
   } else {
     titleText = elem.getAttribute('aria-label') || '';
   }
   return titleText;
 }
 
 const elems = document.querySelectorAll('.datepicker_input');
 for (const elem of elems) {
   const datepicker = new Datepicker(elem, {
     'format': 'dd/mm/yyyy', // UK format
     title: getDatePickerTitle(elem)
   });
 }