using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace HelpDesk01.Models
{
    public class Ticket
    {
        public Guid Uid { get; set; } = Guid.Empty;
        public string Object { get; set; } = null;
        public string Subject { get; set; } = null;
    }
}
